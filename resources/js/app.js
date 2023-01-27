// import './bootstrap';
console.log('hello!')
import './calendar'
import './home'

import.meta.glob([
   '../img/**',
])

if(location.pathname === '/contact') {
   const agreeCheck = document.getElementById('agreeCheck')
   const submitButton = document.getElementById('submitButton')
   agreeCheck.addEventListener('change', () => {
      if(agreeCheck.checked) {
         submitButton.disabled = false
      } else {
         submitButton.disabled = true
      }
   })
}
