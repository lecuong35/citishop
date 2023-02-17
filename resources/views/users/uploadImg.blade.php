<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/test" method="POST" enctype="multipart/form-data">
        @csrf 
       <input type="file" name="images[]" id="img" multiple accept="image/*">

        <button type="submit">Upload</button>
    </form>


    <!-- <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";

        const firebaseConfig = {
        apiKey: "AIzaSyBOGJ_P-2ZqvJwFWwDIBgRmzMwMfwnFSW8",
        authDomain: "citishop-laravel.firebaseapp.com",
        databaseURL: "https://citishop-laravel-default-rtdb.firebaseio.com",
        projectId: "citishop-laravel",
        storageBucket: "citishop-laravel.appspot.com",
        messagingSenderId: "540466416635",
        appId: "1:540466416635:web:369194d3da7ffb0cfe595e",
        measurementId: "G-B3N9V4FZLS"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);

        import  { getStorage, ref as sRef, uploadBytesResumable, getDownloadURL }
            from "https://www.gstatic.com/firebasejs/9.14.0/firebase-storage.js";
        
        import { getFirestore, doc, getDoc, setDoc, collection, addDoc }
            from "https://www.gstatic.com/firebasejs/9.14.0/firebase-firestore.js" 

        const clouddb = getFirestore();

        let fileName = "";
        let imgURI = [];
        let hiddenValue = document.getElementById("hiddenValue");
        document.getElementById("btnUpload").addEventListener("click", function() {
            let images = [];
            images = document.getElementById("imgUpload").files;
            let img = document.getElementById("imgUploaded");
            for (const image of images) {
                fileName = image.name;

                console.log(fileName);
                const metaData = {
                    contentType: image.type,
                }

                const storage = getStorage();
                const storageRef = sRef(storage, "images/"+fileName);
                const UploadTask = uploadBytesResumable(storageRef, image, metaData);

                UploadTask.on('state-changed', 
                    (snapshot) => {
                        let progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                        progress = progress.toFixed(2);
                        // document.getElementById("textUpload").innerHTML = "Upload: " + progress + "%";

                    },
                    (error) => {
                        console.log(error);
                    },
                    () => {
                        getDownloadURL(UploadTask.snapshot.ref).then( (uri) => {
                            document.getElementById("imgUploaded").setAttribute("src", uri);
                            imgURI.push(uri);
                        }).then( () => {
                            console.log(imgURI);
                        })
                    }
            
                )
                
            }
    
        })
    </script> -->
</body>
</html>