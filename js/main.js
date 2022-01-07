
//paralax
const rellax = new Rellax('.rellax', {
});

//side animation
gsap.registerPlugin(ScrollTrigger);

gsap.to(".bio-box", {
    scrollTrigger : {
        trigger : ".bio-box",
        toggleActions : "none none none pause",
        toggleClass :"bio-box-active"
    },
    duration : 3
})


//typing animation
const thanks_el = document.querySelector(".thanks")
const single_p = document.querySelector(".single-p")

const options = {
    strings: ['Thank you for ^1000\n visiting this site!!'],
    typeSpeed: 50,
    startDelay: 2000,
  };
  
if(thanks_el){
    const thanks = new Typed(".thanks", options)
    
  } else if (single_p){
    const typed = new Typed('.single-p', {
    stringsElement : "#single-type",
    smartBackspace: false,
    typeSpeed:50,
    showCursor: true,
    cursorChar: '|',
    autoInsertCss: true,
  });

}
const fireCon = document.querySelector(".fire-container")



//cursor
const cursor = document.querySelector(".cursor")

document.addEventListener("mousemove", (event)=>{
  // console.log(event)

  const mouseY = event.clientY
  const mouseX = event.clientX

  cursor.style.transform = `translate(${mouseX}px, ${mouseY}px )`
  
  // fireCon.style.transform = `translate(${mouseX}px, ${mouseY}px )`

  //when it hovers a tags

  const allAs = document.querySelectorAll("a")

  allAs.forEach(a =>{
    a.addEventListener("mouseover", ()=>{
      cursor.classList.add("hovered")
    })

    a.addEventListener("mouseout", ()=>{
      cursor.classList.remove("hovered")
    })
  })
})

//fire 

const fire = document.querySelector(".fire-container img")
const fireRight = document.querySelector(".fire-container2 img")


console.log(url.url)

const imgUrl = url.url

let i = 1
const imgChange = ()=>{
    i+=1

    if(i < 7){
      fire.setAttribute("src", `${imgUrl}/fire/fire${i}.png`)

     

    } else {
      i = 0
    }

}

let iRight = 0

const imgRightChange = ()=>{
  iRight+=1
  console.log(iRight)

  if(iRight < 4){
    fireRight.setAttribute("src", `${imgUrl}/fire-right/fire-right${iRight}.png`)

   

  } else {
    iRight = 0
  }
}


if(fire){
  setInterval(()=>{imgChange()}, 200)
  
} 

if (fireRight){
  setInterval(()=>{imgRightChange()}, 400)
  
}
