# Xolura Input Modifier

Xolura Input Modifiers is a **serializer / input modifiers that standardize json / form-data input before assigning to model (esp Eloquent Model)**


# Usage

# Serializer Class

 1. Create a class that is on the same depth level as transformers
	 For consistency purposes for name try to use (Model Name)Serializer.php
 2. Extends Xolura\InputModifier\ModifierAbstract
 3. On class constructor make sure parent::construct($request) is called. $request is array
 4.  create a public function called modifiers(). This function has to return allowed fields and their applicable conversions

For example:
![enter image description here](https://lh3.googleusercontent.com/9qtGGn-w9_QktTeKyE0v0PJ_9VAfZNfDAHgtMraAq9mm4D_GROFHLa90iw1LNBn8Of5r3Z2uBA6EF1cAd6utfQnAv-SYllymDFRF2QhMCywLjL7ofoGcfDvgBxQ39qiusdk7xdCmmLqgAeIsODWoT_jXMEih_uXX38Nrw0Rre-FHK6aA-tub8zV0yfHFUgdOSTkEcy3E5XVDQWu2r69S9ttnNxqsAr4_kDF97VB0ZX1TRRsOcMdREihAlmsNRmvKRDBdYS4_dskAa-3shMw-sIdC61L3dC6UXwL3HwOckFIUCcCyBnFJLvn1WaY86BqX9d4HOiJrK3gi983Z7bPhaZF7Bd9xlqInT5bI_nbXwFBT2vO7W2WqjG5zvKkxNlfRI3wps7swu_bQga1uq1JZenAcv-neEnF_WtcB5o2TFz0RrE2w58N6k8FM4AWEcdAy2D79MvXBIinm2haAWYVDiJU4KKbZ0l9VR4uPOdfC9uCivq7w7Cw1YAGhQq0b8QppyuCjsng2pmNCfPzfzavGRjHeo7f3FYw2GbBU5Jk_N4JJU_2h_R50J1MLJA73UfyGUmrKTV-NxnvFMXVtkgElzVhW9tDymhDvLIdTgWLVD6lMqMMvr06gPRQz2WYBZY_3ipH_VJqcwComJsXHJzGGDY61PaOv622NNA=w517-h343-no)

## Assigning to models

1. Create a new instance of the serializer class and pass input array as constructor
2. Call the modify() function

For example: 
![enter image description here](https://lh3.googleusercontent.com/1WhHXTwNTceDAodQmlciIpeEt2v7cwjWJrO0ZEFBkycgZW390n_CG2tqSluBs_b6S8qgXLn4mQe89U81Pl_yphDwWQnCuaHHxdKXr12_-SXxKMFK8AmwiFNtpL2SwHvyNVeYJ7M0J5nniwkWPo72zu5WEWjs2tFzdQJBDPPLQLCKdsdXgu4LZhgGWOZ2wgibvVi4xRIaiGrZ-YGPpS-mblwWz04NpR4xe7acSG5tZcz9K6C-3-p6JZJYxrYssSrDywrrKSD2QCiC3O_yR4veeeB9Ka9VvchKYje_Pm80tndmrwT_3KCuv5SyuN6ZxqtRe-aAtZ5Rb4mqQGnD9U3qgyCzs6jrscwwL0lWj_wei7pNmFy44ImpRG2t93s59qNKD73oWLneAfQD0xiDsFk-ZmywIzMirSPsJ2LdRaPpPqF1JjpyImEC8XIG08KEgaL4p3-OKiNgzZe_hd-Bedr3OgzaaZ8c1RN6_zPlwn0aGZrlBLThdgYG0ZNpCRjcG0YnasFXzf4ITCedkPzdGjxbbmiHhz4Rl-X0ZKHksbvRtkcYTCj_0EoY6EFxtHnEMCWbkEthvMZ05HzQkqJpU6On9uGMznW1-x_HkikCsuukGLDT0PAPNHVwPauEXiRziOe___YRx4uH72xG2Y-u52oHWzJChPi7zb77Dg=w944-h326-no)