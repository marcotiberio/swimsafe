import $ from 'jquery'

// Logo Animation

$(window).scroll(function () {
  const logo = $('.logo')
  if ($(this).scrollTop() > 100) {
    logo.addClass('logo--small')
  } else {
    logo.removeClass('logo--small')
  }
})

// Homepage Animation

if (window.location.pathname === '/') {
  if (!window.localStorage.getItem('visited')) {
    window.localStorage.setItem('visited', true)

    setTimeout(function () {
      const wrapperCurtain = document.querySelector('.wrapper-curtain')
      wrapperCurtain.classList.add('translate-up')
    }, 2000)
  } else {
    const wrapperCurtain = document.querySelector('.wrapper-curtain')
    wrapperCurtain.classList.add('hidden')
  }
}
