(function(){

    const config = {
        apiKey: "AIzaSyD8-rrhG5b2DtN58gXLNvCD4ZRiKAvslOs",
        authDomain: "ecommerce-upayuwin.firebaseapp.com",
        databaseURL: "https://ecommerce-upayuwin.firebaseio.com",
        projectId: "ecommerce-upayuwin",
        storageBucket: "ecommerce-upayuwin.appspot.com",
        messagingSenderId: "179852905701",
      };
      firebase.initializeApp(config);

    //Get Element
    const preObject = document.getElementById('object');

    //Create references
    const dbRefObject = firebase.database().ref().child('data');
    const dbRefItem = firebase.database().ref().child('item');

    // dbRefObject.on('value', snap => console.log(snap.val()));
    // dbRefItem.on('value', snap => console.log(snap.val()));
}());
