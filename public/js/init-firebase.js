const firebaseConfig = {
  apiKey: "AIzaSyAKCMoPVXq9r1hsiD2O8Uh9fHzRamxj62A",
  authDomain: "swiftciti-70ca4.firebaseapp.com",
  projectId: "swiftciti-70ca4",
  storageBucket: "swiftciti-70ca4.appspot.com",
  messagingSenderId: "144675613756",
  appId: "1:144675613756:web:d1fce9a37acd2140b2a739",
  measurementId: "G-F99G9R2PP8"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);


const vapidKey = "BBQ8ZsKquAtd2ePsCYUmH216VTwNb4NDxSKnUfpv26X5xu_rZ45-luLNz66ayH8Vrl4tE2EM2gI6N6mJW2Xcg-g";
const messaging = firebase.messaging();
messaging.usePublicVapidKey(vapidKey);

requestTokenPermission();

function requestTokenPermission() {

	// messaging.getToken()
 //        	.then(token => messaging.deleteToken(token) )
 //        	.catch(e => console.error(e));

	messaging.requestPermission()
        .then(function() {
    		messaging.getToken().then(function(token){
        		console.log('token:', token);
        		//save token
        	});
        })
        .catch(function(err) {
            if (err.code == "messaging/permission-blocked") {
        		userPermissionBlocked(); //Update the status at the backend accordingly
    		}
    	});


  messaging.onMessage((payload) => {
		console.log('Message received. ', payload);
		console.log('Message received. ', payload);
	});

 
}











