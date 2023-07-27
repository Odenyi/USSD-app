$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// delete Extension 
$('.deleteicon').click(function (e) {
  var el = this;
  e.preventDefault();



  // Delete id
  let deleteid =$(el).closest('.extension_row').find('.delete_class').val();
  let extension =$(el).closest('.extension_row').find('.extension_class').first().text();
  let code =$(el).closest('.extension_row').find('.code_class').first().text();


   

  // Confirm box
  bootbox.confirm(`Do you really want to delete Extension ${extension} on USSD ${code}?`, function (result) {

      if (result) {
          // AJAX Request
          $.ajax({
              method: 'POST',
              url: '/delete-extension',
              data: {'extension_id': deleteid},
              success: function (response) {
                  
                  // Removing row from HTML Table
                  if (response.successful == 1) {
                      $(el).closest('.extension_row').css('background', 'tomato');
                      $(el).closest('.extension_row').fadeOut(800, function () {
                          $(this).remove();
                      });
                     
                      
                     
                  } else {
                      bootbox.alert('Record not deleted.');
                  }

              }
          });
      }

  });

});

//delete partner
$('.deletepartner').click(function (e) {
    var el = this;
    e.preventDefault();
  
  
  
    // Delete id
    let deleteid =$(el).closest('.partner_row').find('.deletepartner_class').val();
    let partner=$(el).closest('.partner_row').find('.partner_class').first().text();
    let username =$(el).closest('.partner_row').find('.username_class').first().text();
  
  
     
  
    // Confirm box
    bootbox.confirm(`Do you really want to delete Partner ${partner} and User ${username}?`, function (result) {
  
        if (result) {
            // AJAX Request
            $.ajax({
                method: 'POST',
                url: '/partner',
                data: {'partner_id': deleteid},
                success: function (response) {
                    
                    // Removing row from HTML Table
                    if (response.successful == 1) {
                        $(el).closest('.partner_row').css('background', 'tomato');
                        $(el).closest('.partner_row').fadeOut(800, function () {
                            $(this).remove();
                        });
                       
                        
                       
                    } else {
                        bootbox.alert('Record not deleted.');
                    }
  
                }
            });
        }
  
    });
  
  });
  
  //mpesa stkpush  and check for cancel request etc
  document.getElementById('depositviaMpesa').addEventListener('click', (event) => {
    event.preventDefault()
   console.log( document.getElementById('depositphone').value)
      
     const requestBody = {amount: document.getElementById('depositamount').value, phone:document.getElementById('depositphone').value
      }
      

     axios.post('/stkpush/creditaccount', requestBody).then((response) => {
      
           if(response.status === 200)
           {
             const res =  response
             let interval;

             let startTime = new Date().getTime()
             let stopTime = new Date().getTime() + 25000;
             let stkreqres = res.data.CheckoutRequestID
             console.log(stkreqres)
             const callback = async () => {
               let now = new Date().getTime()

               if(now > stopTime){
                   clearInterval(interval)
                   $('#c2b_response').show()
                   document.getElementById('c2b_response').innerHTML = "your payment request has timed out"
                   document.getElementById('c2b_response').style.color = "red"
                   setTimeout(failedPayment,5000)
                         
                   function failedPayment(){
                     $('#c2b_response').fadeOut()
                   // window.location.reload()
                   }
               }
               
               const _poll = await fetch('/confirmationstk/' + stkreqres)

                 if(_poll.status === 200) {
                     const _res = await _poll.json()
                     console.log(_res);

                     if(_res.errorCode){
                       
                     }
                     else if(_res.ResultCode && _res.ResultCode == 0) {
                         clearInterval(interval)
                         let depositedamount1 = JSON.parse(res.config.data);
                        //  const depositedamount = depositedamount1.amount
                        //  const CheckoutRequestID = _res.CheckoutRequestID;
                        //  const MerchantRequestID = _res.MerchantRequestID;
                         
                        //  $.ajax({
                        //    method: 'GET',
                        //    url: '/senddarajaapidata',
                        //    data: {'depositedamount': depositedamount,
                        // ' CheckoutRequestID':CheckoutRequestID,'MerchantRequestID':MerchantRequestID},
                        //    success: function (response) {
                               
                        //        // Removing row from HTML Table
                        //        if (response.success == 1) {
                                 
                        //           alert(response.message);
                        //           window.location.reload();
                                   
                                  
                        //        }
                        //      }
                        //    });

                         $('#c2b_response').show()
                         document.getElementById('c2b_response').innerHTML = _res.ResultDesc;
                         document.getElementById('c2b_response').style.color = "green"
                         setTimeout(recievedPayment,5000)
                         
                         function recievedPayment(){
                         
                           $('#c2b_response').fadeOut()
                         // window.location.reload()
                         }
                     } else if(_res.ResultCode && _res.ResultCode != 0) {
                         clearInterval(interval)
                        
                         $('#c2b_response').show()
                         
                         document.getElementById('c2b_response').innerHTML = _res.ResultDesc;
                         document.getElementById('c2b_response').style.color = "red"
                         setTimeout(failedPayment,5000)
                         
                         function failedPayment(){
                           $('#c2b_response').fadeOut()
                         // window.location.reload()
                         }
                     }
                     console.log(_res)
                     return;
                 }

                 if(_poll.status >= 500) {
                     clearInterval(interval)
                     $('#c2b_response').show()
                         document.getElementById('c2b_response').innerHTML = "Sorry we encountered an error";
                         document.getElementById('c2b_response').style.color = "red"
                         setTimeout(failedPayment,5000)
                         
                         function failedPayment(){
                           $('#c2b_response').fadeOut()
                         
                         }
                     
                 }
                             
              }
             interval = setInterval(callback, 2000)

             
             $('#c2b_response').show()
                                                  
             document.getElementById('c2b_response').innerHTML = response.data.ResponseDescription
             document.getElementById('c2b_response').style.color = "orange"
           } 
           else {
               $('#c2b_response').show()
               document.getElementById('c2b_response').innerHTML = response.data.errorMessage 
               document.getElementById('c2b_response').style.color = "red"
                         setTimeout(failedPayment,5000)
                         
                         function failedPayment(){
                           $('#c2b_response').fadeOut()
                         
                         }
                     
             }}).catch((error) => 
             { 
               console.log(error);
               $('#c2b_response').show()
               document.getElementById('c2b_response').innerHTML = error.response
               document.getElementById('c2b_response').style.color = "red"
                         setTimeout(failedPayment,5000)
                         
                         function failedPayment(){
                           $('#c2b_response').fadeOut()
                         
                         }
             })
     })


