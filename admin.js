document.addEventListener('DOMContentLoaded', loadCourses);

function loadCourses() {
    fetch('get_courses.php')
        .then(response => response.json())
        .then(data => {
            const coursesList = document.getElementById('courses-list');
            coursesList.innerHTML = '';
            data.forEach(course => {
                const courseElement = document.createElement('div');
                courseElement.innerHTML = `
                    <h4>${course.name}</h4>
                    <p>${course.description}</p>
                    <button onclick="deleteCourse(${course.id})">Delete</button>
                `;
                coursesList.appendChild(courseElement);
            });
        });
}

function addCourse() {
    const courseName = document.getElementById('course-name').value;
    const courseDescription = document.getElementById('course-description').value;

    fetch('add_course.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name: courseName, description: courseDescription })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            loadCourses();
        } else {
            alert('Error adding course');
        }
    });
}

function deleteCourse(courseId) {
    fetch('delete_course.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: courseId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            loadCourses();
        } else {
            alert('Error deleting course');
        }
    });
}
