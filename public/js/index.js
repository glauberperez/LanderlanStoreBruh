(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

const getCep = async () => {
  const cep = window.document.querySelectorAll('#cep')

  await fetch(`https://viacep.com.br/ws/${cep}/json/`, {
    method: 'get',
    headers: {
      'Content-Type': 'application/json',
      Accept: 'application/json',
      'Access-Control-Allow-Origina': '*'
    },
    body: JSON.stringify({ cep }),
  })
    .then()
}

window.addEventListener('click', () => {
  
})