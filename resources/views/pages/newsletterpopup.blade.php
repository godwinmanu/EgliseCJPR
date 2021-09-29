<div id="popupNewsletter" class="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Insérer votre adresse mail pour recevoir au quotidien
                    les messages pour l'édificatin de votre foi et être informé de nos actualités.
                </p>
                <form action="{{ route('welcome.newsletterForm') }}" method="POST" class="w-100">
                    @csrf
                    <input type="email" name="popupNewsletter-email" class="form-control" placeholder="johhn@gmail.com" required>
                    <button type="submit" name="popupNewsletter-submit-button" class="text-light fw-bold">Envoyer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" id="close-popupNewsletter">FERMER</button>
            </div>
        </div>
    </div>
</div>