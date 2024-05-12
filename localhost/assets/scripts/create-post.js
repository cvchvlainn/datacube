// список сообществ
let btnListCommunities = document.querySelector(".main-central__selectCommunity");
let arrowListCommunities = document.querySelector(".main-central__selectCommunity__iconArrow");
let listCommunities = document.querySelector(".main-central__selectCommunity__listCommunity");

btnListCommunities.addEventListener("click", () => {
  listCommunities.classList.toggle("active");

  if(listCommunities.classList.contains("active")) {
    arrowListCommunities.style.transform = "rotate(0deg)";
    listCommunities.style.display = "block";
  } else {
    arrowListCommunities.style.transform = "rotate(180deg)";
    listCommunities.style.display = "none";
  }
});

// смена типа поста
let btns = document.querySelectorAll(".main-central__headerCreatePost__btn");
let formText = document.querySelector(".main-central__createPost__mainCreatePostText");
let formImageOrVideo = document.querySelector(".main-central__createPost__mainCreatePostImageOrVideo");

btns.forEach((btn) => {
   btn.addEventListener("click", (event) => {
     event.preventDefault();
 
     btns.forEach((otherBtn) => {
       otherBtn.classList.remove("main-central__headerCreatePost__btnActive");
     });
 
     btn.classList.add("main-central__headerCreatePost__btnActive");
 
     if (btn.dataset.id === "1") {
       formText.style.display = "flex";
       formImageOrVideo.style.display = "none";
     } else {
       formText.style.display = "none";
       formImageOrVideo.style.display = "flex";
     }
   });
 });