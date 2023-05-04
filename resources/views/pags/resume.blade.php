@extends('layouts.main')
@section('title', 'Resume')
@section('resume', 'active')
@section('content')

<main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resumo</h2>
                <p>Estudante no curso Técnico em Informática no Instituto Federal de Minas Gerais, aprendendo bases do Desenvolvimento Web e Móvel, além de Banco de Dados.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumário</h3>
                    <div class="resume-item pb-0">
                        <h4>Mariana Almeida</h4>
                        <p><em>Estudante de programação no IFMG - Minas Gerais</em></p>
                        <p>
                        <ul>
                            <li>Avenida Abílio Machado, 915</li>
                            <li>+55 37 988023839</li>
                            <li>marianaalmeidafga@gmail.com</li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Educação</h3>
                    <div class="resume-item">
                        <h4>Ensino Fundamental</h4>
                        <h5>2017 - 2020</h5>
                        <p><em>Colégio Unifor, Formiga</em></p>
                        <p>Ensino Fundamental Básico</p>
                    </div>
                    <div class="resume-item">
                        <h4>Ensino Intregrado/ Médio e Técnico</h4>
                        <h5>2021 - 2023</h5>
                        <p><em>Instituto Federal de Minas Gerais, Formiga</em></p>
                        <p>Ensino Médio junto ao Técnino em Informática.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Experiência Profissional</h3>
                    <div class="resume-item">
                        <h4>Social Media </h4>
                        <h5>2020 - 2021</h5>
                        <p><em>Empresa, Formiga</em></p>
                        <p>
                        <ul>
                            <li>Responsável por anúncios online</li>
                            <li>Venda em marketplace.</li>
                            <li>Responsável pela atualização de Redes Sociais</li>
                            <li>Responsável por criação e atualização de catálogos online e físicos</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

</main>

@endsection