# Scrabble Score

#### _Epicodus PHP BDD Practice, 2/16/2017_

#### By Maggie Harrington

## Description

_A website written in PHP that takes a user input word and determines the Scrabble score of that word._

## Setup/Installation Requirements
* _Download at my GitHub repository: https://github.com/maggie-harrington/scrabble-score ._
* _First open Git Bash, type "cd Desktop" and hit enter. Copy the link above, then type "git clone " and paste the link and hit enter. You will now have a copy of this project on your desktop. In Git Bash, type "cd scrabble-score/" and hit enter, then "composer install" and enter. Once the installation has finished, type "cd web" and enter, then "php -S localhost:8000" and enter. In your web browser, navigate to "localhost:8000", which will open the home page._

## Known Bugs

_No known bugs at this time._

## Support and contact details

_If you run into any issues or have questions, ideas or concerns, please feel free to contact me at maggie.harrington@gmail.com_

## Technologies Used

_Written using Git Bash, Atom, Composer, Silex, Twig, PHPUnit, and Bootstrap._

### MIT License

Copyright (c) 2017 Maggie Harrington

## Specifications

| Test cases for calculateScore()                                | Input    | Output  |
|----------------------------------------------------------------|----------|---------|
| 1: Single letter entered in upper case                         | K        | 5       |
| 2: Single letter entered in lower case                         | k        | 5       |
| 3: Single letter where another letter has same score           | d        | 2       |
| 4: Word with letters assigned to same score                    | at       | 2       |
| 5: Word with letters assigned to different scores              | echo     | 9       |
