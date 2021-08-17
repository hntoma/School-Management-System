let students = null
let selectedStudent = null

function fetchStudent() {
    document.querySelector('#studentSelection').innerHTML = ''
    fetch('http://localhost/scl/School/controller/getStudent.php').then(res => res.json()).then(data => {
        students = data;
        data.forEach(student => {
            const option = document.createElement('option')
            option.setAttribute('name', 't_index')
            option.setAttribute('value', student.id)
            option.innerText = student.name

            document.querySelector('#studentSelection').appendChild(option)
        })
    })
}
fetchStudent()


function getStudentId() {
    // preventDefault()
    const selected = document.querySelector('#studentSelection').value
    students.filter(studentData => {
        if (studentData.id === selected) {
            selectedstudent = studentData.id
            document.querySelector('#name').value = studentData.name
            document.querySelector('#phone').value = studentData.phone
            document.querySelector('#email').value = studentData.email
            document.querySelector('#class').value = studentData.class
        }
    })
}

function editStudent() {
    const id = selectedstudent
    const name = document.querySelector('#name').value
    const email = document.querySelector('#email').value
    const phone = document.querySelector('#phone').value
    const classes = document.querySelector('#class').value
    const form = new FormData()
    form.append('name', name)
    form.append('email', email)
    form.append('phone', phone)
    form.append('class', classes)
    form.append('id', id)
    // console.log(form)
    fetch('http://localhost/scl/School/controller/editStudent.php', {
        method: "POST",
        body: form
    }).then(res => res.text()).then(data => {
        document.querySelector('#status').innerHTML = data ? 'Edited Successfully.' : 'Failed to edit data!'
        fetchStudent()
    })
}

function deleteStudent() {
    const id = selectedstudent
    const form = new FormData()
    form.append('id', id)
    fetch('http://localhost/scl/School/controller/deleteStudent.php', {
        method: "POST",
        body: form
    }).then(res => res.text()).then(data => {
        document.querySelector('#status').innerHTML = data ? 'Deleted Successfully.' : 'Failed to delete data!'
        document.querySelector('#name').value = ''
        document.querySelector('#email').value = ''
        document.querySelector('#phone').value = ''
        document.querySelector('#class').value = ''
        selectedstudent = ''
        fetchStudent()
    })
}
