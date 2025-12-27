const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');
const message = document.getElementById('matchingmessage');

if (password && confirmPassword && message) {
    confirmPassword.addEventListener('input', () => {
        const currentPass = password.value;
        const confirmPass = confirmPassword.value;
        message.textContent = confirmPass !== currentPass ? 'Passwords are not matching!' : '';
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const addModal = document.getElementById('new-animal-form');
    const editModal = document.getElementById('edit-animal-form');
    const addBtn = document.getElementById('add-new-animal');

    if (addBtn) {
        addBtn.onclick = () => addModal.classList.remove('hidden');
    }

    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('.edit-animal-btn');
        if (trigger && editModal) {

            document.getElementById('edit-id_animal').value = trigger.dataset.id || '';
            document.getElementById('edit-nom').value = trigger.dataset.nom || '';
            document.getElementById('edit-espece').value = trigger.dataset.espece || '';
            document.getElementById('edit-alimentation').value = trigger.dataset.alimentation || '';
            document.getElementById('edit-paysorigine').value = trigger.dataset.pays || '';
            document.getElementById('edit-id_habitat').value = trigger.dataset.habitat || '';
            document.getElementById('edit-description').value = trigger.dataset.desc || '';
            document.getElementById('edit-image').value = trigger.dataset.image || '';
            
            editModal.classList.remove('hidden');
        }
    });


    document.querySelectorAll('.close-modal-btn').forEach(btn => {
        btn.onclick = () => {
            if (addModal) addModal.classList.add('hidden');
            if (editModal) editModal.classList.add('hidden');
        };
    });

 
    window.onclick = (e) => {
        if (e.target === addModal) addModal.classList.add('hidden');
        if (e.target === editModal) editModal.classList.add('hidden');
    };
});