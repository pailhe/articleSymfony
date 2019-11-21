<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(){

        $variable = [
            [ 'titre' => 'Toto à la plage',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
                a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
                 auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
                  dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
                   In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://lh3.googleusercontent.com/-8bJy6BwT_f0/T8Z1AIlsgNI/AAAAAAAAAqI/k68YFVknOxs/s800/alaplage.png',
                'id' => 1
            ],

            [ 'titre' => 'Toto refuse la pipe',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://i.pinimg.com/originals/1c/e2/bf/1ce2bff4771bfd331b525ac141b01b3b.jpg',
                'id' => 2

            ],

            [ 'titre' => 'Toto découvre les drogues dures',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://videos-mdr.com/wp-content/uploads/2013/11/Martine-decouvre-les-drogues-dures-parodie-livre.jpg?x27316',
                'id' => 3

            ],

            [ 'titre' => 'Toto et la bombe artisanale',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'http://idata.over-blog.com/0/36/50/34/divers1/Martine1.jpg',
                'id' => 4

            ],

            [ 'titre' => 'Toto partage un space cake',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://lagriotteanice.files.wordpress.com/2014/02/22348_236700502267_262286_n.jpg?w=242&h=300',
                'id' => 5

            ],

            [ 'titre' => 'Toto fait caca au fond du jardin',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://data.pixiz.com/output/user/frame/preview/400x400/1/6/9/0/50961_9fbb6.jpg',
                'id' => 6

            ],

        ];

        return $this->render('home.html.twig', [
            'variableArray' => $variable
        ]);

    }

    /**
     * @param $id
     * @Route("/article/{id}", name="articleShow")
     */
    public function articleShow($id){
        $variable = [
            [ 'titre' => 'Toto à la plage',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
                a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
                 auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
                  dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
                   In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://lh3.googleusercontent.com/-8bJy6BwT_f0/T8Z1AIlsgNI/AAAAAAAAAqI/k68YFVknOxs/s800/alaplage.png',
                'id' => 1
            ],

            [ 'titre' => 'Toto refuse la pipe',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://i.pinimg.com/originals/1c/e2/bf/1ce2bff4771bfd331b525ac141b01b3b.jpg',
                'id' => 2

            ],

            [ 'titre' => 'Toto découvre les drogues dures',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://videos-mdr.com/wp-content/uploads/2013/11/Martine-decouvre-les-drogues-dures-parodie-livre.jpg?x27316',
                'id' => 3

            ],

            [ 'titre' => 'Toto et la bombe artisanale',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'http://idata.over-blog.com/0/36/50/34/divers1/Martine1.jpg',
                'id' => 4

            ],

            [ 'titre' => 'Toto partage un space cake',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://lagriotteanice.files.wordpress.com/2014/02/22348_236700502267_262286_n.jpg?w=242&h=300',
                'id' => 5

            ],

            [ 'titre' => 'Toto fait caca au fond du jardin',
                'contenu' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia, tortor a posuere egestas,
               neque lectus mollis nulla, ut fringilla metus mi quis odio. Fusce nec vehicula dolor. Etiam ac dapibus augue,
               a finibus sapien. Donec faucibus iaculis urna, nec tempus eros luctus quis. Vivamus metus eros, dapibus eget
               auctor vitae, interdum quis leo. In vel enim ullamcorper, accumsan elit et, finibus mauris. Suspendisse nibh
               dolor, tincidunt quis lacinia nec, dictum id augue. Curabitur consequat sem sit amet ipsum elementum cursus.
               In molestie et libero at blandit. Suspendisse at auctor enim.',
                'image' => 'https://data.pixiz.com/output/user/frame/preview/400x400/1/6/9/0/50961_9fbb6.jpg',
                'id' => 6

            ],

        ];
        return $this->render('articleShow.html.twig', [
            'variableArray' => $variable[$id-1],
            'id' => $id
        ]);
    }

}