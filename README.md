# README

# 概要
ToDoから習慣化にしていく為の投稿アプリです

## URL
http://todofile.herokuapp.com/

# テスト使用の方法
ログイン情報
email : test@testmail
password : testtest
デフォルトの投稿内容が見れます

# アプリの使い方
印象に残った言葉と、自分の印象、具体的な行動内容をそれぞれ投稿します。
投稿者のみ編集・削除が可能です。
他の人の投稿も見れるので、取り入れたい行動内容をシェアできます

## version
・PHP 7.3.11
・laravel 6.20.2

# DB設計

## usersテーブル
- ユーザー情報
 - 名前が必須
 - メールアドレスは一意である
 - メールアドレスは@とドメインを含む必要がある
 - パスワードが必須
 - パスワードは8文字以上
 - パスワードは確認用を含めて2回入力する

|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false, unieque: true|
|password|string|null: false|
|encrypted_password|string|null: false|
### Association
- has_many :words


## wordsテーブル
- 投稿情報
 - text（印象に残った言葉）が必須(300文字以内)
 - impression（言葉に対する印象）が必須(300文字以内)
 - action（具体的な行動内容）が必須(300文字以内)

|Column|Type|Options|
|------|----|-------|
|text|string|null: false|
|impression|string|null: false|
|action|string|null: false|
|user_id|integer|null: false, foreign_key: true|
### Association
- belongs_to :user


## ER図
https://drive.google.com/file/d/1OtFbQDwTI_ZVDgceM89pUCAStbvnwY4u/view?usp=sharing

