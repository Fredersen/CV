/*======== SCROLL ECTIONS ACTIVE LINK ========*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offseTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector(' .nav_menu a[href*=' + sectionId + ']').classList.add('active-list')   
        }else{
            document.querySelector(' .nav_menu a[href*=' + sectionId + ']').classList.remove('active-list')
        }
    })
}
window.addEventListener('scroll', scrollActive)

