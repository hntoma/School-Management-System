let subjects = null
let selectedsubject = null

function fetchsubject() {
    document.querySelector('#subjectSelection').innerHTML = ''
    fetch('http://localhost/scl/School/controller/getsubject.php').then(res => res.json()).then(data => {
        subjects = data;
        data.forEach(subject => {
            const option = document.createElement('option')
            option.setAttribute('name', 't_index')
            option.setAttribute('value', subject.id)
            option.innerText = subject.name

            document.querySelector('#subjectSelection').appendChild(option)
        })
    })
}
fetchsubject()


function getSubjectId() {
    // preventDefault()
    const selected = document.querySelector('#subjectSelection').value
    subjects.filter(subjectData => {
        if (subjectData.id === selected) {
            selectedsubject = subjectData.id
            document.querySelector('#name').value = subjectData.name
            document.querySelector('#classes').value = subjectData.class
            document.querySelector('#division').value = subjectData.division
        
        }
    })
}

function editSubject() {
    const id = selectedsubject
    const name = document.querySelector('#name').value
    const classes = document.querySelector('#classes').value
    const division = document.querySelector('#division').value
    const form = new FormData()
    form.append('name', name)
    form.append('class', classes)
    form.append('division', division)
    form.append('id', id)
    // console.log(form)
    fetch('http://localhost/scl/School/controller/editSubject.php', {
        method: "POST",
        body: form
    }).then(res => res.text()).then(data => {
        document.querySelector('#status').innerHTML = data ? 'Edited Successfully.' : 'Failed to edit data!'
        fetchsubject()
    })
}

function deletesubject() {
    const id = selectedsubject
    const form = new FormData()
    form.append('id', id)
    fetch('http://localhost/scl/School/controller/deletesubject.php', {
        method: "POST",
        body: form
    }).then(res => res.text()).then(data => {
        document.querySelector('#status').innerHTML = data ? 'Deleted Successfully.' : 'Failed to delete data!'
        document.querySelector('#name').value = ''
        document.querySelector('#email').value = ''
        document.querySelector('#phone').value = ''
        document.querySelector('#class').value = ''
        selectedsubject = ''
        fetchsubject()
    })
}
