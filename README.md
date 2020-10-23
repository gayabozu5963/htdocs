# 個人アプリ　じげもん農園

# 概要
じげもんとは長崎の方言で「地元」という意味です。  
長崎に限らず、色んな地方の農家の方と全国の一般ユーザーの間で  
作物の売買ができる交流の場を提供するWebアプリケーションを想定しています。  

# 制作背景
実家が農家の友人が、  
『市場に卸すことができない作物を廃棄せずなんとか販売できないか』  
という悩みをぼやいていたのがきっかけです。  
市場には出せないが旨みのつまった作物を販売したり、  
農家の販売経路拡大として利用できるECサイトがあれば役に立つと思い制作しました。  
 
# DEMO(gifで動画や写真を貼って、ビューのイメージを掴んでもらいます)
![トップページ]
("https://user-images.githubusercontent.com/67771439/96949465-e6316400-1522-11eb-9930-753c82b6c579.png")

 
# 実装完了の機能
◆会員登録機能  
　名前、パスワードを登録できる。登録後会員コードが発行される。  
◆会員ログイン機能  
　会員コードとパスワードを入力してログインできる。  
◆商品出品機能  
　登録したユーザーが商品の画像、商品名、価格を入力すると商品を出品できる。  
◆商品編集機能  
　商品を出品したユーザーが、商品の画像、商品名、価格を変更及び削除をすることができる。  
◆商品購入機能  
　一般ユーザーが商品を選択し、買い物カゴに入れ(買い物カゴの商品数を変更及び削除することも可)、  
 購入処理ができる。  

# 課題や今後実装したい機能  
◆会員ユーザーにできることを出品以外にも、購入履歴から商品のおすすめ機能、出品者と購入者のコメントやりとり機能なども追加したい。  
◆会員にアイコン画像を載せれるようにして、出品者の顔がわかるようにしたい。  

# 開発環境
　XAMPP 7.4.8
# DB設計
言語  
  php7.4.10  
  HTML/CSS  
データベース  
  MySQL
