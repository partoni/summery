let articles = document.querySelector(".Featured-works__articles")
let article = document.querySelectorAll(".Featured-works__article")
window.addEventListener('resize',addSlider)

 function addSlider(){
    let innerWidth = window.innerWidth;
    let articlesSize = articles.offsetWidth;
     if(innerWidth<700){
        articles.style.display = 'flex'
        articles.style.width = innerWidth*article.length+'px'
        article.forEach(item=>item.style.width=articlesSize/article.length+'px')

        console.log(article[0].style.width , articles.offsetWidth);
        articles.style.overflow = 'hidden'
     }else{
        articles.style.display = 'block'
     }
 }