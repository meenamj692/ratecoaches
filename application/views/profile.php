<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Profile</h1>       
    </div>
</section>
<section style="padding-top: 100px;" >
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <table class="table table-bordered" >
                    <tr>
                        <th>Name</th>
                        <td><?= $session_info['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $session_info['email'] ?></td>
                    </tr>    
                    <tr>
                        <th>Role</th>
                        <td><?= ($session_info['role_id'] == 1) ? "General User" : "Coach" ?></td>
                    </tr>    
                </table>
            </div>
        </div>
    </div>
</section>