import AOS from 'aos'

function aosInit () {
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  })
}

window.addEventListener('load', () => {
  aosInit()
})
