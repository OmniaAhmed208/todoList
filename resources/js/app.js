import './bootstrap';
import '../css/bootstrap.css';
import '../css/todo.css';

window.addEventListener('alert', (event)=>{
    let data = event.detail;
    Swal.fire({
        position: "data.position",
        icon: data.type,
        title: data.title,
        showConfirmButton: false,
        timer: data.timer
      });
});
