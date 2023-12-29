function solo_numeros(dato) {
  valoresAceptados = /^[0-9]+$/;
  if (dato.match(valoresAceptados)) {
    return true;
  } else {
    return false;
 }
}

const valorTicket=200;

function procesar() {
      
      let descuento=0;

      //-- Lectura de los datos del cliente -----------------------
      const nombre=document.querySelector('#inombre').value;
      const apellido=document.querySelector('#iapellido').value;
      const correo=document.querySelector('#mail').value
      //-----------------------------------------------------------

      //-- Verifico que los datos del cliente esten completos
      if (nombre!='' && apellido!='' && correo!='') {
          
          //-- Lectura de la cantidad de tickets y la categoría ---------
          let ticketCant=document.getElementById('idInputCantidad').value;
          const selector=document.getElementById('inputState').value;
          let num_tickets = parseInt(ticketCant);
          //-------------------------------------------------------------
          
          if (solo_numeros(ticketCant)) {
                if(selector=='Estudiante') {
                    descuento = 0.8*valorTicket*num_tickets;
                }
                else if(selector=='Junior') {
                    descuento = 0.15*valorTicket*num_tickets;
                }
                else
                    descuento = 0.50*valorTicket*num_tickets;
          
                    let suPago = valorTicket*parseInt(ticketCant) - descuento;
                document.getElementById('valor_total').innerHTML='Su pago $ '+suPago;
          } 
          else     
               document.getElementById('valor_total').innerHTML='ERROR EN LA CANTIDAD DE TICKETS!';
      }
      else 
          document.getElementById('valor_total').innerHTML='DATOS INCOMPLETOS!';
}  

function limpiarform() {
    document.querySelector('#clientform').reset();
    document.getElementById('valor_total').innerHTML='Total a Pagar: $';
}

  