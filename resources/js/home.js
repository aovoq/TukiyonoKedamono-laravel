import Swiper, {Pagination, Autoplay, EffectFade} from 'swiper'
import 'swiper/scss'
import 'swiper/scss/autoplay'
import 'swiper/scss/effect-fade'
import 'swiper/scss/pagination'

if (location.pathname === '/') {
   const swiper = new Swiper('.swiper', {
      modules: [Pagination, Autoplay, EffectFade],
      pagination: {
         el: '.swiper-pagination',
         clickable: true
      },
      effect: 'fade',
      autoplay: {
         delay: 5000,
      },
      speed: 2000,
   })
}
