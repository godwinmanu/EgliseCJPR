@extends("layouts.template")

<div id="commandBookPopup" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <span>Passer la commande</span>
                <button class="btn btn-close close-commandBookPopup"></button>
            </div>
            <div class="modal-body commandBookPopup-body">
                <input type="text" name="commandBookPopup-username" class="form-control" placeholder="Nom & Prénoms">
                <input type="email" name="commandBookPopup-email" class="form-control" placeholder="johhn@gmail.com">
                <input type="tel" name="commandBookPopup-tel" class="form-control" placeholder="+229 97752462">
                <input type="number" name="commandBookPopup-bookNumber" class="form-control" min="1" placeholder="Quantité à commander">
                <textarea name="commandBookPopup-text" cols="30" rows="5" class="form-control" placeholder="Détails complémentaire ..."></textarea>
                <button type="submit" name="commandBookPopup-submit-button" class="w-100 text-light fw-bold commandBookPopup-submit-button">Envoyer</button>
            </div>

        </div>
    </div>
</div>