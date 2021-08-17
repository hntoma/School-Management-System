let teachers = null
let selectedTeacher = null

function fetchTeacher() {
    document.querySelector('#teacherSelection').innerHTML = ''
    fetch('http://localhost/scl/School/controller/getTeacher.php').then(res => res.json()).then(data => {
        teachers = data;
        data.forEach(teacher => {
            const option = document.createElement('option')
            option.setAttribute('name', 't_index')
            option.setAttribute('value', teacher.id)
            option.innerText = teacher.name
            
            document.querySelector('#teacherSelection').appendChild(option)
        })
    })
}
fetchTeacher()


function getTeacherId() {
    // preventDefault()
    const selected = document.querySelector('#teacherSelection').value
    teachers.filter(teacherData => {
        if (teacherData.id === selected) {
            selectedTeacher = teacherData.id
            document.querySelector('#name').value = teacherData.name
            document.querySelector('#phone').value = teacherData.phone
            document.querySelector('#email').value = teacherData.email
        }
    })
}

function editTeacher() {
    const id = selectedTeacher
    const name = document.querySelector('#name').value
    const email = document.querySelector('#email').value
    const phone = document.querySelector('#phone').value
    const form = new FormData()
    form.append('name', name)
    form.append('email', email)
    form.append('phone', phone)
    form.append('id', id)
    // console.log(form)
    fetch('http://localhost/scl/School/controller/editTeacher.php', {
        method: "POST",
        body: form
    }).then(res => res.text()).then(data => {
        document.querySelector('#status').innerHTML = data ? 'Edited Successfully.' : 'Failed to edit data!'
        fetchTeacher()
    })
}

function deleteTeacher() {
    const id = selectedTeacher
    const form = new FormData()
    form.append('id', id)
    fetch('http://localhost/scl/School/controller/deleteTeacher.php', {
        method: "POST",
        body: form
    }).then(res => res.text()).then(data => {
        document.querySelector('#status').innerHTML = data ? 'Deleted Successfully.' : 'Failed to delete data!'
        document.querySelector('#name').value = ''
        document.querySelector('#email').value = ''
        document.querySelector('#phone').value = ''
        selectedTeacher = ''
        fetchTeacher()
    })
}
