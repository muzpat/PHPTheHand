if (window.PaymentRequest) {
// if it is supported on user's browser
// Pat=yment request object
const supportedPaymentMethods = 
[
  {
   supportedMethods: ['basic-card']
  }
];

//Payment details 
const paymentDetails = {
 total: {
  label: 'Total Cost',
  amount: {
   currency: 'GBP',
   value: 30
  }
 }
}
 //custom options
 const options = {}

 // create request
const paymentRequest = new PaymentRequest(
 supportedPaymentMethods, paymentDetails, options
);

paymentRequest.show();

}

else {
 // fallback code
}

