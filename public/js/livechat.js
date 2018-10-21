var config = {
        apiKey: "AIzaSyD8-rrhG5b2DtN58gXLNvCD4ZRiKAvslOs",
        authDomain: "ecommerce-upayuwin.firebaseapp.com",
        databaseURL: "https://ecommerce-upayuwin.firebaseio.com",
        projectId: "ecommerce-upayuwin",
        storageBucket: "ecommerce-upayuwin.appspot.com",
        messagingSenderId: "179852905701"
      };
      firebase.initializeApp(config);
      var db = firebase.database();
      var chatRef = db.ref('livechat');
      chatRef.on('value',function showData(items)
      {
          items.forEach(function(data){
              var data2 = data.val();
              data.forEach(function(items2){
                console.log(items2.val().message)
              })
          })

      });

      
