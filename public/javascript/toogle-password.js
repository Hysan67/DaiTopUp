document.addEventListener('DOMContentLoaded', function () {
   const togglePasswordButton = document.getElementById('toggle-password');
   const passwordInput = document.getElementById('password');
   const eyeIcon = document.getElementById('eye-icon');

   togglePasswordButton.addEventListener('click', function () {
       if (passwordInput.type === 'password') {
           passwordInput.type = 'text';
           eyeIcon.style.color = '#6366f1'; 
           eyeIcon.innerHTML = `
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
               <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.857-.682 1.664-1.198 2.385" />
               `;
       } else {
           passwordInput.type = 'password';
           eyeIcon.style.color = '#6b7280';
           eyeIcon.innerHTML = `
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
               <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.857-.682 1.664-1.198 2.385" />
           `;
       }
   });
});
