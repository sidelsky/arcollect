export default class Modal {

   constructor() {
      this.body = document.querySelector('.home');
      this.openModal = document.querySelector('.js-modalButton');
      this.modal = document.querySelector('.js-modal');
      this.closeModal = document.querySelector('.js-close');

      if (this.body) {
         /**
          * Open Modal
          */
         this.openModal.addEventListener('click', (e) => this.handleOpen(e));

         /**
          * Close Modal
          */
         this.closeModal.addEventListener('click', (e) => this.handleClose(e));
      }
   }

   handleOpen(e) {
      this.body.classList.add('isActive');
   }

   handleClose(e) {
      //this.modal.style.display = "none";
      this.body.classList.remove('isActive');
   }

}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//    if (event.target == modal) {
//       modal.style.display = "none";
//    }
// }