<style>
    .user-profile {
        display: flex;
        align-items: center;
    }

    .profile-picture {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
    }

    .profile-picture img {
        width: 100%;
        height: auto;
    }

    .dropdown {
        position: relative;
    }

    .dropbtn {
        background-color: #f1f1f1;
        color: #333;
        padding: 10px;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
        color: #3d24ad;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #ddd;
    }
</style>

<div class="user-profile">
    <div class="profile-picture" style="margin-left: 25px; margin-right: -26px;">
        <img src="{{ asset('assets/img/img04.webp') }}" alt="Foto do usuário" style="width: 170%; height: 150%; padding-right: 30px;">
    </div>
    <div class="dropdown">
        <a href="" style="margin-right: -40px; color:rgb(0, 254, 0); font-weight: 600;"><span style="padding-right: 10px; width: 60p;">{{ auth()->user()->email }}</span></a>
    </div>
</div>
