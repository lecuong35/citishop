import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";

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
const analytics = getAnalytics(app);

import  {getStorage, ref as sRef, uploadBytesResumable, getDownloadURL}
    from "https://www.gstatic.com/firebasejs/9.14.0/firebase-storage.js"

function upload() {
    let files = document.getElementById("imgUpload").files[0];
    let img = document.getElementById("imgUploaded");
    let fileName = files.name;

    console.log(fileName);
    const metaData = {
        contentType: files.type,
    }

    const storage = getStorage();
    const storageRef = sRef(storage, "images/"+fileName);
    const UploadTask = uploadBytesResumable(storageRef, files, metaData);

    () => {
        getDownloadURL(UploadTask.snapshot.ref).then((downloadURL) => {
            console.log(downloadURL);
        })
    }
    
    // let storageRef = firebase.storage().ref("images/"+fileName);
    // let uploadTask = storageRef.put(files);
    // uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
    //     console.log('File available at', downloadURL);
    //     img.setAttribute("src",downloadURL);
    //     img.style.display = "block";
    //   });
    
}