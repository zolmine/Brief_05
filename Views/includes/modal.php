<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="css/modal.css">

<div class="modal fade" id="EpicModal" tabindex="-1" aria-labelledby="EpicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EpicModalLabel">Epic Title</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="x">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <table class="tb">

                    <tr>
                        <td>room name : </td></i>
                        <td> <input type="text " class="inp" disabled></td>
                        <td><button><i class="fas fa-plus-circle add"></i>

                            </button></td>
                        <td><button><i class="fas fa-minus-circle delete"></i>

                            </button></td>
                    </tr>
                    <div class="space"></div>
                    <tr>
                        <td>room price : </td>
                        <td> <input type="text " class="inp" disabled></td>
                        <td><button><i class="fas fa-plus-circle add"></i>

                            </button></td>
                        <td>
                            <button><i class="fas fa-minus-circle delete"></i>

                            </button></td>
                    </tr>


                </table>
                <div class="space"></div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="button" class="btn sa">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>