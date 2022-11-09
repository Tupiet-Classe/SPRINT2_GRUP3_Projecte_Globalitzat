let id = id => document.getElementById(id)

let btn = id('btn-add-user')
let form = id('addUserForm')
let modal = new bootstrap.Modal(id('addUser'))

form.addEventListener('submit', (e) => {
    e.preventDefault()
    asignCourse()
})

btn.addEventListener('click', (e) => {
    e.preventDefault()
    asignCourse()
})

async function asignCourse() {
    let user = id('userToAdd').value
    let courseID = +id('courseId').innerText

    console.log(user, courseID)

    let response = await fetch('../PHP/asignarCurso.php', {
        method: 'POST',
        body: JSON.stringify({
            courseID,
            user
        }),
        headers: {
            'Content-Type': 'application/json'
        }
    })

    if (response.ok) {
        let data = await response.json()
        if (data.ok) {
            modal.hide()
            successToast.show()
        } else {
            errorToast.show()
        }

    }
}

const successToast = new bootstrap.Toast(id('successToast'))
const errorToast = new bootstrap.Toast(id('errorToast'))