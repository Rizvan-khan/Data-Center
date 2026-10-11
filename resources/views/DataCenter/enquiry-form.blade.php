<div class="col-xl-5 col-lg-4"><div class="hero-form-wrapper bg-white p-4 p-md-5 rounded shadow-lg w-100"><h2 class="fs-24 mb-4">Discuss your requirements</h2>
<form class="d-flex flex-column gap-3" id="service-enquiry" data-email="{{ getwebsetting()->email }}">
<label>Full name<input name="name" class="form-control custom-input" autocomplete="name" required></label>
<label>Email address<input type="email" name="email" class="form-control custom-input" autocomplete="email" required></label>
<label>Phone number<input type="tel" name="phone" class="form-control custom-input" autocomplete="tel" required></label>
<label>Your requirements<textarea name="message" class="form-control custom-input" rows="3" required></textarea></label>
<button class="btn btn-primary" type="submit">Prepare email enquiry <i class="las la-envelope" aria-hidden="true"></i></button>
<p class="small mb-0" id="enquiry-status" role="status"></p>
</form></div></div>
<script>
document.getElementById('service-enquiry').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = this.dataset.email;
    const status = document.getElementById('enquiry-status');
    if (!email) { status.textContent = 'Please contact our team using the Contact Us page.'; return; }
    const values = new FormData(this);
    const body = 'Name: ' + values.get('name') + '\\nEmail: ' + values.get('email') + '\\nPhone: ' + values.get('phone') + '\\n\\n' + values.get('message');
    window.location.href = 'mailto:' + encodeURIComponent(email) + '?subject=' + encodeURIComponent(document.title + ' enquiry') + '&body=' + encodeURIComponent(body);
    status.textContent = 'Your email app will open with the enquiry ready to review and send.';
});
</script>
