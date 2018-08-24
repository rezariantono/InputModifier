# Xolura Input Modifier

Xolura Input Modifiers is a **serializer / input modifiers that standardize json / form-data input before assigning to model (esp Eloquent Model)**


# Usage

 1. Create a class that is on the same depth level as transformers
	 For consistency purposes for name try to use (Model Name)Serializer.php
 2. Extends Xolura\InputModifier\ModifierAbstract
 3. On class constructor make sure parent::construct($request) is called. $request is array
 4.  create a public function called modifiers(). This function has to return allowed fields and their applicable conversions

For example:

![enter image description here](https://lh3.googleusercontent.com/9qtGGn-w9_QktTeKyE0v0PJ_9VAfZNfDAHgtMraAq9mm4D_GROFHLa90iw1LNBn8Of5r3Z2uBA6EF1cAd6utfQnAv-SYllymDFRF2QhMCywLjL7ofoGcfDvgBxQ39qiusdk7xdCmmLqgAeIsODWoT_jXMEih_uXX38Nrw0Rre-FHK6aA-tub8zV0yfHFUgdOSTkEcy3E5XVDQWu2r69S9ttnNxqsAr4_kDF97VB0ZX1TRRsOcMdREihAlmsNRmvKRDBdYS4_dskAa-3shMw-sIdC61L3dC6UXwL3HwOckFIUCcCyBnFJLvn1WaY86BqX9d4HOiJrK3gi983Z7bPhaZF7Bd9xlqInT5bI_nbXwFBT2vO7W2WqjG5zvKkxNlfRI3wps7swu_bQga1uq1JZenAcv-neEnF_WtcB5o2TFz0RrE2w58N6k8FM4AWEcdAy2D79MvXBIinm2haAWYVDiJU4KKbZ0l9VR4uPOdfC9uCivq7w7Cw1YAGhQq0b8QppyuCjsng2pmNCfPzfzavGRjHeo7f3FYw2GbBU5Jk_N4JJU_2h_R50J1MLJA73UfyGUmrKTV-NxnvFMXVtkgElzVhW9tDymhDvLIdTgWLVD6lMqMMvr06gPRQz2WYBZY_3ipH_VJqcwComJsXHJzGGDY61PaOv622NNA=w517-h343-no)
