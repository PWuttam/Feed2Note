# Feed2Note

**RSS → Draft → Translate → _One-click Publish_ (Medium / note / X)**  
毎日RSSを取得し、翻訳＆下書き作成、ワンクリックで各プラットフォームに投稿する個人開発プロジェクト。

---

## 🚀 What’s inside (current status)
- **frontend/**: Vite + Vue + Tailwind（起動確認済）
- **backend/**: Laravel 予定（明日初期化）
- **docs/**: 設計メモ・スクショ置き場

---

## 🧱 Tech Stack
- Backend: **Laravel 11**, Queue（後日）、feed-io（RSS）
- Frontend: **Vue 3 (Vite) + TailwindCSS** → 将来 **React Native(Expo)** へ拡張
- DB: MySQL / SQLite
- Translate: Google Translate API / DeepL
- Auth: Laravel Sanctum（2FAは後日）

---

## 🛠 Local Setup (quick)
```bash
# Frontend
cd frontend
npm install
npm run dev  # http://localhost:5173

# Backend（後日）
cd ../backend
# composer create-project laravel/laravel .
# php artisan key:generate
# php artisan serve  # http://127.0.0.1:8000

---

🔄 Daily Flow
1.Scheduler が RSS を取得（毎朝 06:00 JST）
2.新規記事のみ DB に保存（重複排除）
3.画面で翻訳＆下書き編集
4.Publish Preview で最終確認 → Medium / note / X へ投稿
5.投稿ログ保存（重複防止・失敗時メッセージ）

🗺 Roadmap (MVP → v1)
•v0.1 Bootstrap: repo 構成・README・CI雛形
•v0.2 Fetch & API: feeds テーブル / rss:fetch / GET /api/feeds
•v0.3 Draft & Translate: articles/draft_notes / Translator API / 認証
•v0.4 Publish: Medium: OAuth / Preview / publish_logs
•v0.5 Publish: X: OAuth2 / Tweet composer（カウンター）
•v0.6 Polish & Release: エラーUX/権限/デプロイ手順

📂 Repository Layout
Feed2Note/
├─ backend/    # Laravel (後日初期化)
├─ frontend/   # Vite + Vue + Tailwind
└─ docs/       # 仕様・設計・スクショ

📜 License

MIT
