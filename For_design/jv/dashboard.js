// Simple tab navigation
document.querySelectorAll('.dashboard-nav a').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelectorAll('.dashboard-main section').forEach(section => {
            section.style.display = 'none';
        });
        document.querySelector(link.getAttribute('href')).style.display = 'block';
        document.querySelectorAll('.dashboard-nav a').forEach(a => {
            a.classList.remove('active');
        });
        link.classList.add('active');
    });
});

// Show and hide job form modal
document.addEventListener("DOMContentLoaded", () => {
    const addNewBtn = document.querySelector(".add-new");
    const jobModal = document.getElementById("jobModal");
    const closeJobModal = document.getElementById("closeJobModal");

    if (addNewBtn && jobModal && closeJobModal) {
        addNewBtn.addEventListener("click", () => {
            jobModal.style.display = "block";
        });

        closeJobModal.addEventListener("click", () => {
            jobModal.style.display = "none";
        });

        window.addEventListener("click", (e) => {
            if (e.target === jobModal) {
                jobModal.style.display = "none";
            }
        });
    }
});

// Modal open/close
document.querySelector('.add-new').addEventListener('click', () => {
    document.getElementById('jobModal').style.display = 'block';
});

document.getElementById('closeJobModal').addEventListener('click', () => {
    document.getElementById('jobModal').style.display = 'none';
});

// Optional: Reset form after submission (if staying on the same page)
document.getElementById('jobForm').addEventListener('submit', function (e) {
    setTimeout(() => {
        this.reset();
        document.getElementById('jobModal').style.display = 'none';
    }, 300); // Delay to let PHP process
});