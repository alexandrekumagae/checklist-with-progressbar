var checkboxes = document.querySelectorAll('.check')
checkboxes.forEach(check => {
  check.addEventListener('click', function () {
    let qtdCheck = checkboxes.length
    checkboxes.forEach(check => {
      if (check.checked) {
      } else {
        qtdCheck--
      }
    });
    let percentage = Math.round((100 / checkboxes.length) * qtdCheck)
    document.getElementById('qtdItems').innerText = qtdCheck
    document.getElementById('bar').style.width = percentage + '%'
  })
})