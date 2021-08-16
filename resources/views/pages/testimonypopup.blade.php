@extends("layouts.template")

<div id="testimonypopup" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <span>Témoignage</span>
                <button class="btn btn-close close-testimonypopup"></button>
            </div>
            <div class="modal-body testimonypopup-body">
                <input type="text" name="testimonypopup-username" class="form-control" placeholder="Nom & Prénoms">
                <input type="email" name="testimonypopup-email" class="form-control" placeholder="johhn@gmail.com">
                <textarea name="testimonypopup-" cols="30" rows="10" class="form-control" placeholder="Votre témoignage ici ..."></textarea>
                <button type="submit" name="testimonypopup-submit-button" class="form-control btn btn-primary text-light fw-bold">Envoyer</button>
            </div>

        </div>
    </div>
</div>