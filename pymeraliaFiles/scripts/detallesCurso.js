let id = id => document.getElementById(id)

let btn = id('btn-add-user')
let form = id('addUserForm')

btn.addEventListener('click', async (e) => {
    e.preventDefault()
    
    let user = +id('userToAdd').value
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
        console.log('yay')
        console.log(response)
        let data = await response.json()
        console.log(await data.ok)
    }
})
