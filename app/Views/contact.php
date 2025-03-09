<?php echo $this->extend('master') ?>

<?php echo $this->section('content') ?>

    <div class="container">
    <h1>Contact!</h1>
        
        <h3>Aula atual: 35 --> <a href="https://www.youtube.com/watch?v=4Zu2r4Ky0rI&list=PLyugqHiq-SKegiaCBJ4XaFp-yr87oFKts&index=35">Link</a></h3>

        <form method="post" class="row g-3" action="<?php echo url_to('contact.store') ?>">

            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="Graico">
                <div id="nameHelp" class="form-text text-light">Digite seu nome</div>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="graico@eumermo.com">
                <div id="emailHelp" class="form-text text-light">Digite um e-mail válido</div>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="Assunto de teste">
                <div id="subjectHelp" class="form-text text-light">Digite um Assunto</div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="6"> Mensagem de teste</textarea>
            </div>


            <button type="submit" class="btn btn-primary col-lg-12 text-center">Submit</button>



        </form>
    </div>
<?php echo $this->endSection() ?>

