<div wire:ignore.self class="modal fade" id="customerCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">First Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model="firstname">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Last Name</label>
                        <input class="form-control" id="message-text" wire:model="lastname">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email</label>
                        <input class="form-control" id="message-text" wire:model="email">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Phone</label>
                        <input class="form-control" id="message-text" wire:model="phone">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" wire:click.prevent="store()">Save</button>
            </div>
        </div>
    </div>
</div>
