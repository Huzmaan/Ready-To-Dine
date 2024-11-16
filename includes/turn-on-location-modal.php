<!-- PopUp Modal Start Here -->
<div class="modal fade" id="turnOnLocation" tabindex="-1" aria-labelledby="turnOnLocationLabel" aria-hidden="true">
    <div class="modal-dialog reset-password-modal">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="0122n">
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                        <div class="modal-body-form">
                            <figure>
                                <img src="assets/images/footer/location-access.svg" alt="img" class="img-fluid">
                            </figure>
                            <h2>Allow Location Access</h2>
                            <p>We need access to your location to show you nearby restaurants for your Dine-in Experience</p>
                            <button type="button" data-bs-dismiss="modal" class="btn ct-btn-prim hvr-bounce-to-right" aria-label="Close" fdprocessedid="0122n">Turn On Location</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PopUp Modal End Here -->

<style>
    .reset-password-modal {
        display: flex;
        align-items: center;
        justify-content: center;
        vertical-align: middle;
        height: -webkit-fill-available;
        max-width: 725px;
    }

    .reset-password-modal .modal-content {
        border-radius: 24px;
    }

    .reset-password-modal .modal-content .modal-header {
        padding: 0;
        border: 0;
    }

    .reset-password-modal .modal-content .modal-header button {
        margin: 0px;
        padding: 0;
        right: 30px;
        position: absolute;
        top: 30px;
        z-index: 999;
        width: 32px;
        height: 32px;
        opacity: 1;
        font-size: 25px;
        font-weight: 400;
        --bs-btn-close-color: black;
    }

    .reset-password-modal .modal-body {
        padding: 24px 40px;
        background-color: var(--white-clr);
        border-radius: 24px !important;
        box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.10);
    }

    .reset-password-modal .modal-body .modal-body-form {
        text-align: center;
    }

    .reset-password-modal .modal-body .modal-body-form figure {
        margin-top: 40px;
    }

    .reset-password-modal .modal-body .modal-body-form figure img {}

    .reset-password-modal .modal-body .modal-body-form h2 {
        color: var(--black-clr);
        text-align: center;
        font-family: var(--font-1);
        font-size: clamp(18px, 1.5vw, 24px);
        font-style: normal;
        font-weight: 700;
        line-height: 24px;
        margin-bottom: 16px;
    }

    .reset-password-modal .modal-body .modal-body-form p {
        color: var(--black-clr);
        text-align: center;
        font-family: var(--font-1);
        font-size: clamp(14px, 1.5vw, 18px);
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        width: 78%;
        margin: 0 auto 30px;
    }

    .reset-password-modal .modal-body .modal-body-form button {
        height: 56px;
        border-radius: 19px;
        font-family: var(--font-1);
        font-size: clamp(18px, 1.5vw, 24px);
        font-style: normal;
        font-weight: 400;
        line-height: clamp(18px, 1.5vw, 24px);
    }
</style>