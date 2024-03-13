@extends('front.master')
@section('title')
Lottery
@endsection
@section('body')
    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area">
        <img class="lottory" src="{{asset('/')}}fronts/assets/images/lottery-b-icon.png" alt="">
        <div class="container">
            <div class="content">
                <h2 class="title">
                    POWERBALL
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#">Powerball</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Singlelottery-Section========== -->
    <section class="singlelottery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="steps">
                        <div class="left">
                            <h4>Only 3 easy steps</h4>
                        </div>
                        <div class="right">
                            <ul>
                                <li>
                                    <div class="box">
                                        <img src="{{asset('/')}}fronts/assets/images/bt1.png" alt="">
                                        <p>1. Pick</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src="{{asset('/')}}fronts/assets/images/bt2.png" alt="">
                                        <p>2. Play</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src="{{asset('/')}}fronts/assets/images/bt3.png" alt="">
                                        <p>3. Win</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="time-wrapper">
                        <div class="time-counter">
                            <img src="{{asset('/')}}fronts/assets/images/clock.png" alt="">
                            <p class="time-countdown" data-countdown="01/01/2021"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pick-number-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pick">
                                    <div class="header-area">
                                        <h4 class="title">Pick 5 Numbers</h4>
                                        <div class="buttons">
                                            <a href="#" class="custom-button1"><i class="fas fa-magic"></i>Quick
                                                Pick</a>
                                            <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Clear
                                                All</a>
                                        </div>
                                    </div>
                                    <div class="body-area">
                                        <ul>
                                            <li>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <span>7</span>
                                            </li>
                                            <li>
                                                <span>8</span>
                                            </li>
                                            <li>
                                                <span>9</span>
                                            </li>
                                            <li>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <span>12</span>
                                            </li>
                                            <li>
                                                <span>13</span>
                                            </li>
                                            <li>
                                                <span>14</span>
                                            </li>
                                            <li>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <span>16</span>
                                            </li>
                                            <li>
                                                <span>17</span>
                                            </li>
                                            <li>
                                                <span>18</span>
                                            </li>
                                            <li>
                                                <span>19</span>
                                            </li>
                                            <li>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <span>21</span>
                                            </li>
                                            <li>
                                                <span>22</span>
                                            </li>
                                            <li>
                                                <span>23</span>
                                            </li>
                                            <li>
                                                <span>24</span>
                                            </li>
                                            <li>
                                                <span>25</span>
                                            </li>
                                            <li>
                                                <span>26</span>
                                            </li>
                                            <li>
                                                <span>27</span>
                                            </li>
                                            <li>
                                                <span>28</span>
                                            </li>
                                            <li>
                                                <span>29</span>
                                            </li>
                                            <li>
                                                <span>30</span>
                                            </li>
                                            <li>
                                                <span>31</span>
                                            </li>
                                            <li>
                                                <span>32</span>
                                            </li>
                                            <li>
                                                <span>33</span>
                                            </li>
                                            <li>
                                                <span>34</span>
                                            </li>
                                            <li>
                                                <span>35</span>
                                            </li>
                                            <li>
                                                <span>36</span>
                                            </li>
                                            <li>
                                                <span>37</span>
                                            </li>
                                            <li>
                                                <span>38</span>
                                            </li>
                                            <li>
                                                <span>39</span>
                                            </li>
                                            <li>
                                                <span>40</span>
                                            </li>
                                        </ul>
                                        <div class="separator">
                                            <p>Pick 1 Power Ball</p>
                                        </div>
                                        <ul>
                                            <li>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <span>7</span>
                                            </li>
                                            <li>
                                                <span>8</span>
                                            </li>
                                            <li>
                                                <span>9</span>
                                            </li>
                                            <li>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <span>12</span>
                                            </li>
                                            <li>
                                                <span>13</span>
                                            </li>
                                            <li>
                                                <span>14</span>
                                            </li>
                                            <li>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <span>16</span>
                                            </li>
                                            <li>
                                                <span>17</span>
                                            </li>
                                            <li>
                                                <span>18</span>
                                            </li>
                                            <li>
                                                <span>19</span>
                                            </li>
                                            <li>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <span>21</span>
                                            </li>
                                            <li>
                                                <span>22</span>
                                            </li>
                                            <li>
                                                <span>23</span>
                                            </li>
                                            <li>
                                                <span>24</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pick">
                                    <div class="header-area">
                                        <h4 class="title">Pick 5 Numbers</h4>
                                        <div class="buttons">
                                            <a href="#" class="custom-button1"><i class="fas fa-magic"></i>Quick
                                                Pick</a>
                                            <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Clear
                                                All</a>
                                        </div>
                                    </div>
                                    <div class="body-area">
                                        <ul>
                                            <li>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <span>7</span>
                                            </li>
                                            <li>
                                                <span>8</span>
                                            </li>
                                            <li>
                                                <span>9</span>
                                            </li>
                                            <li>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <span>12</span>
                                            </li>
                                            <li>
                                                <span>13</span>
                                            </li>
                                            <li>
                                                <span>14</span>
                                            </li>
                                            <li>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <span>16</span>
                                            </li>
                                            <li>
                                                <span>17</span>
                                            </li>
                                            <li>
                                                <span>18</span>
                                            </li>
                                            <li>
                                                <span>19</span>
                                            </li>
                                            <li>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <span>21</span>
                                            </li>
                                            <li>
                                                <span>22</span>
                                            </li>
                                            <li>
                                                <span>23</span>
                                            </li>
                                            <li>
                                                <span>24</span>
                                            </li>
                                            <li>
                                                <span>25</span>
                                            </li>
                                            <li>
                                                <span>26</span>
                                            </li>
                                            <li>
                                                <span>27</span>
                                            </li>
                                            <li>
                                                <span>28</span>
                                            </li>
                                            <li>
                                                <span>29</span>
                                            </li>
                                            <li>
                                                <span>30</span>
                                            </li>
                                            <li>
                                                <span>31</span>
                                            </li>
                                            <li>
                                                <span>32</span>
                                            </li>
                                            <li>
                                                <span>33</span>
                                            </li>
                                            <li>
                                                <span>34</span>
                                            </li>
                                            <li>
                                                <span>35</span>
                                            </li>
                                            <li>
                                                <span>36</span>
                                            </li>
                                            <li>
                                                <span>37</span>
                                            </li>
                                            <li>
                                                <span>38</span>
                                            </li>
                                            <li>
                                                <span>39</span>
                                            </li>
                                            <li>
                                                <span>40</span>
                                            </li>
                                        </ul>
                                        <div class="separator">
                                            <p>Pick 1 Power Ball</p>
                                        </div>
                                        <ul>
                                            <li>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <span>7</span>
                                            </li>
                                            <li>
                                                <span>8</span>
                                            </li>
                                            <li>
                                                <span>9</span>
                                            </li>
                                            <li>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <span>12</span>
                                            </li>
                                            <li>
                                                <span>13</span>
                                            </li>
                                            <li>
                                                <span>14</span>
                                            </li>
                                            <li>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <span>16</span>
                                            </li>
                                            <li>
                                                <span>17</span>
                                            </li>
                                            <li>
                                                <span>18</span>
                                            </li>
                                            <li>
                                                <span>19</span>
                                            </li>
                                            <li>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <span>21</span>
                                            </li>
                                            <li>
                                                <span>22</span>
                                            </li>
                                            <li>
                                                <span>23</span>
                                            </li>
                                            <li>
                                                <span>24</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pick">
                                    <div class="header-area">
                                        <h4 class="title">Pick 5 Numbers</h4>
                                        <div class="buttons">
                                            <a href="#" class="custom-button1"><i class="fas fa-magic"></i>Quick
                                                Pick</a>
                                            <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Clear
                                                All</a>
                                        </div>
                                    </div>
                                    <div class="body-area">
                                        <ul>
                                            <li>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <span>7</span>
                                            </li>
                                            <li>
                                                <span>8</span>
                                            </li>
                                            <li>
                                                <span>9</span>
                                            </li>
                                            <li>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <span>12</span>
                                            </li>
                                            <li>
                                                <span>13</span>
                                            </li>
                                            <li>
                                                <span>14</span>
                                            </li>
                                            <li>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <span>16</span>
                                            </li>
                                            <li>
                                                <span>17</span>
                                            </li>
                                            <li>
                                                <span>18</span>
                                            </li>
                                            <li>
                                                <span>19</span>
                                            </li>
                                            <li>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <span>21</span>
                                            </li>
                                            <li>
                                                <span>22</span>
                                            </li>
                                            <li>
                                                <span>23</span>
                                            </li>
                                            <li>
                                                <span>24</span>
                                            </li>
                                            <li>
                                                <span>25</span>
                                            </li>
                                            <li>
                                                <span>26</span>
                                            </li>
                                            <li>
                                                <span>27</span>
                                            </li>
                                            <li>
                                                <span>28</span>
                                            </li>
                                            <li>
                                                <span>29</span>
                                            </li>
                                            <li>
                                                <span>30</span>
                                            </li>
                                            <li>
                                                <span>31</span>
                                            </li>
                                            <li>
                                                <span>32</span>
                                            </li>
                                            <li>
                                                <span>33</span>
                                            </li>
                                            <li>
                                                <span>34</span>
                                            </li>
                                            <li>
                                                <span>35</span>
                                            </li>
                                            <li>
                                                <span>36</span>
                                            </li>
                                            <li>
                                                <span>37</span>
                                            </li>
                                            <li>
                                                <span>38</span>
                                            </li>
                                            <li>
                                                <span>39</span>
                                            </li>
                                            <li>
                                                <span>40</span>
                                            </li>
                                        </ul>
                                        <div class="separator">
                                            <p>Pick 1 Power Ball</p>
                                        </div>
                                        <ul>
                                            <li>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <span>7</span>
                                            </li>
                                            <li>
                                                <span>8</span>
                                            </li>
                                            <li>
                                                <span>9</span>
                                            </li>
                                            <li>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <span>12</span>
                                            </li>
                                            <li>
                                                <span>13</span>
                                            </li>
                                            <li>
                                                <span>14</span>
                                            </li>
                                            <li>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <span>16</span>
                                            </li>
                                            <li>
                                                <span>17</span>
                                            </li>
                                            <li>
                                                <span>18</span>
                                            </li>
                                            <li>
                                                <span>19</span>
                                            </li>
                                            <li>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <span>21</span>
                                            </li>
                                            <li>
                                                <span>22</span>
                                            </li>
                                            <li>
                                                <span>23</span>
                                            </li>
                                            <li>
                                                <span>24</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <a href="#" class="add-ticket-btn"><i class="fas fa-plus"></i> Add Tickets</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cart-summary">
                            <div class="top-area">
                                <h4 class="title">
                                    Cart Summary
                                </h4>
                                <p class="text">
                                    You've got 30% of chance to win. Shop more tickets to get more chance
                                </p>
                            </div>
                            <div class="middle-area">
                                <div class="tikit">
                                    <span class="left">Filled out Tickets</span>
                                    <span class="right">3</span>
                                </div>
                                <div class="price">
                                    <span class="left">Ticket Price
                                        <small>(8 tickets <i class="fas fa-times"></i> $4.99)</small>
                                    </span>
                                    <span class="right">$39.92</span>
                                </div>
                            </div>
                            <div class="bottom-area">
                                <div class="total-area">
                                    <span class="left">Total</span>
                                    <span class="right">$39.92</span>
                                </div>
                                <a href="#" class="custom-button2">Buy Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="frequent-number">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-header">
                            <h2 class="title ep">
                                Most Frequent Number
                            </h2>
                            <p class="text">
                                Check Your lotto online, find all the lotto winning numbers and see
                                if you won the latest lotto jackpots
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="number-slider owl-carousel">
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
