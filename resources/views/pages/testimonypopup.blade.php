<div id="testimonypopup" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <span>Témoignage</span>
                <button class="btn btn-close close-testimonypopup"></button>
            </div>
            <div class="modal-body testimonypopup-body w-100">

                <form action="{{ route('storeTestimony') }}" method="POST" class="w-100 needs-validation" novalidate>
                    @csrf
                    <div class="input w-100">
                        <input type="text" name="testimonypopup-userfullname" class="form-control w-100 @error('testimonypopup-username') is-invalid @enderror" placeholder="Nom & Prénoms" required>
                        @error('testimonypopup-userfullname')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input w-100">
                        <input type="email" name="testimonypopup-email" class="form-control w-100 @error('testimonypopup-email') is-invalid @enderror" placeholder="johhn@gmail.com" required>
                        @error('testimonypopup-email')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input w-100">
                        <input type="text" name="testimonypopup-city" class="form-control w-100 @error('testimonypopup-city') is-invalid @enderror" placeholder="Ville(Exemple : Porto-Novo)" required>
                        @error('testimonypopup-city')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input w-100">
                        <textarea name="testimonypopup-text" cols="30" rows="7" class="form-control w-100" placeholder="Votre témoignage ici ..." required></textarea>
                        @error('testimonypopup-text')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <button type="submit" name="testimonypopup-submit-button" class="w-100 btn btn-primary text-light fw-bold">Envoyer</button>
                </form>
            </div>

        </div>
    </div>
</div>