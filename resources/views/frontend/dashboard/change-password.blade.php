<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <div class="fp_dashboard_body fp__change_password">
        <div class="fp__review_input">
            <h3>change password</h3>
            <div class="comment_input pt-0">
                <form method="POST" action="{{ route('profile.password.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="fp__comment_imput_single">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" id="current_password"
                                    placeholder="Current Password">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="fp__comment_imput_single">
                                <label for="password">New Password</label>
                                <input type="password" name="password" id="password" placeholder="New Password">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="fp__comment_imput_single">
                                <label for="password_confirmation">confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="common_btn mt_20">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
