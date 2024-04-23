const inputFile = valor => {
   ( valor === '0' || valor === '1'  )
      ? document.querySelector("#elemento-file").className = 'sm:col-span-2 hidden'
      : document.querySelector("#elemento-file").className = 'sm:col-span-2'
}

function confirmarDelete ( id ) {
   alertify.confirm(`Publicaci&oacute;n #${id}`, 'Eliminamos?', function() { 
      document.querySelector(`#form-${id}`).submit(); 
   }
   ,function() { 
      alertify.error('Cancel')
   });
}