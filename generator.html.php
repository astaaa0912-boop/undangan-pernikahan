<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Link Undangan - Neysa & Putra</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background-color: #070103;
            overflow-x: hidden;
        }

        /* ATMOSPHERE BACKGROUND ELEGANT & MEWAH */
        .bg-luxury-atmosphere {
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(158, 25, 55, 0.45) 0%, transparent 60%),
                radial-gradient(circle at 90% 40%, rgba(212, 175, 55, 0.12) 0%, transparent 50%),
                radial-gradient(circle at 10% 70%, rgba(85, 12, 27, 0.6) 0%, transparent 50%),
                radial-gradient(circle at 50% 100%, rgba(20, 3, 7, 0.95) 0%, transparent 80%);
            background-attachment: fixed;
        }

        /* BACKGROUND HERO DENGAN FOTO PENGANTIN */
        .bg-hero {
            background: linear-gradient(to bottom, rgba(7, 1, 3, 0.65), rgba(7, 1, 3, 0.92)), 
                        url("images/eca-putra.jpeg");
            background-size: cover;
            background-position: center 30%;
        }

        .font-serif-luxury { font-family: 'Cormorant Garamond', serif; }
        .font-cinzel { font-family: 'Cinzel', serif; }

        /* TEXT GOLD GRADIENT MEWAH */
        .text-gold {
            background: linear-gradient(135deg, #FFE8A3 0%, #D4AF37 35%, #F3E5AB 60%, #AA771C 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 2px 8px rgba(212, 175, 55, 0.25));
        }
        
        .bg-gold-gradient {
            background: linear-gradient(135deg, #BF953F 0%, #FCF6BA 25%, #B38728 65%, #AA771C 100%);
        }

        /* PERMUKAAN KACA MEWAH (GOLDEN PEARL GLASS) */
        .glass-card-pearl {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.1) 0%, rgba(26, 4, 9, 0.85) 100%);
            backdrop-filter: blur(25px) saturate(180%);
            -webkit-backdrop-filter: blur(25px) saturate(180%);
            border: 1px solid rgba(212, 175, 55, 0.35);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.9),
                        0 0 20px rgba(212, 175, 55, 0.15),
                        inset 0 1px 2px rgba(255, 255, 255, 0.4),
                        inset 0 -1px 2px rgba(0, 0, 0, 0.8);
        }

        /* ANIMATED GLOWING ORBS BACKGROUND */
        .glow-orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
            z-index: 0;
            opacity: 0.5;
            animation: floatGlow 10s infinite alternate ease-in-out;
        }
        .orb-1 { top: 10%; left: -10%; width: 350px; height: 350px; background: rgba(158, 25, 55, 0.5); }
        .orb-2 { bottom: 15%; right: -5%; width: 400px; height: 400px; background: rgba(212, 175, 55, 0.25); animation-delay: -5s; }

        @keyframes floatGlow {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(30px, 40px) scale(1.15); }
        }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #070103; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(#BF953F, #AA771C); border-radius: 4px; }
    </style>
</head>
<body class="bg-luxury-atmosphere text-stone-100 antialiased min-h-screen flex items-center justify-center p-4 relative">

    <div class="glow-orb orb-1"></div>
    <div class="glow-orb orb-2"></div>

    <div class="w-full max-w-md bg-hero rounded-3xl p-7 md:p-8 space-y-6 relative z-10 overflow-hidden border border-amber-500/30 shadow-[0_20px_50px_rgba(0,0,0,0.9)]">
        
        <div class="absolute -top-12 -left-12 w-36 h-36 bg-amber-200/20 rotate-45 blur-xl pointer-events-none"></div>

        <div class="text-center space-y-2 pt-2">
            <span class="font-cinzel text-[10px] uppercase tracking-[0.4em] text-amber-200/90 block">The Wedding Celebration Of</span>
            <h1 class="font-serif-luxury text-4xl md:text-5xl text-gold font-normal tracking-wide">Neysa & Putra</h1>
            
            <div class="w-20 h-[1px] bg-gradient-to-r from-transparent via-amber-400/60 to-transparent mx-auto my-3"></div>
            
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-400/10 border border-amber-400/30">
                <i class="fas fa-link text-amber-400 text-[10px]"></i>
                <span class="font-cinzel text-[9px] tracking-[0.2em] text-amber-200 uppercase">Invitation Link Generator</span>
            </div>
            
            <p class="text-[11px] text-stone-300 font-light pt-2 italic">Buat tautan undangan khusus & pesan WhatsApp otomatis untuk para tamu undangan.</p>
        </div>

        <div class="glass-card-pearl p-5 rounded-2xl space-y-4">
            <div>
                <label class="block font-cinzel text-[10px] text-amber-200 uppercase tracking-wider mb-2">Nama Tamu Undangan</label>
                <div class="relative">
                    <input type="text" id="guestInput" placeholder="Contoh: Budi Setiawan" class="w-full px-4 py-3 pl-10 text-xs bg-black/50 border border-amber-400/30 rounded-xl text-white placeholder-stone-400 focus:border-amber-300 focus:outline-none transition">
                    <i class="fas fa-user text-amber-400/60 absolute left-3.5 top-3.5 text-xs"></i>
                </div>
            </div>

            <button onclick="generateLink()" class="w-full py-3.5 bg-gold-gradient text-stone-950 font-cinzel text-xs font-bold tracking-widest rounded-xl shadow-[0_0_25px_rgba(212,175,55,0.4)] hover:brightness-110 active:scale-[0.98] transition flex items-center justify-center gap-2">
                <i class="fas fa-paper-plane text-xs"></i> Buat Link & Format WA
            </button>
        </div>

        <div id="resultArea" class="hidden space-y-4 glass-card-pearl p-5 rounded-2xl border-t border-amber-400/40">
            <div class="space-y-1.5">
                <label class="block font-cinzel text-[10px] text-amber-300 uppercase tracking-wider">Link Undangan Digital</label>
                <div class="relative">
                    <input type="text" id="linkOutput" readonly class="w-full px-4 py-2.5 text-xs bg-black/60 border border-amber-400/20 rounded-xl text-stone-200 focus:outline-none font-mono">
                </div>
            </div>

            <div class="space-y-1.5">
                <label class="block font-cinzel text-[10px] text-amber-300 uppercase tracking-wider">Draft Pesan WhatsApp</label>
                <textarea id="waTextOutput" rows="6" readonly class="w-full px-4 py-3 text-xs bg-black/60 border border-amber-400/20 rounded-xl text-stone-200 leading-relaxed focus:outline-none"></textarea>
            </div>

            <button onclick="copyWA()" class="w-full py-3 bg-emerald-600/90 hover:bg-emerald-600 text-white font-cinzel text-xs font-bold tracking-wider rounded-xl transition flex items-center justify-center gap-2 border border-emerald-400/40 shadow-lg active:scale-[0.98]">
                <i class="fab fa-whatsapp text-sm"></i> Salin Pesan WA
            </button>
        </div>

        <footer class="pt-2 text-center text-[9px] font-cinzel text-amber-200/60 tracking-widest border-t border-white/10">
            The Wedding of Neysa & Putra &copy; 2026
        </footer>
    </div>

    <script>
        function generateLink() {
            const name = document.getElementById('guestInput').value.trim();
            if (!name) {
                alert('Masukkan nama tamu terlebih dahulu!');
                return;
            }

            const baseUrl = window.location.origin;
            const encodedName = encodeURIComponent(name);
            const fullLink = `${baseUrl}/index.html?to=${encodedName}`;

            const waMessage = `Kepada Yth.\nBapak/Ibu/Saudara/i *${name}*\n\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami.\n\nBerikut link undangan digital kami:\n${fullLink}\n\nMerupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu.\n\nTerima kasih.`;

            document.getElementById('linkOutput').value = fullLink;
            document.getElementById('waTextOutput').value = waMessage;
            document.getElementById('resultArea').classList.remove('hidden');
        }

        function copyWA() {
            const copyText = document.getElementById('waTextOutput');
            copyText.select();
            navigator.clipboard.writeText(copyText.value);
            alert('Pesan WA berhasil disalin! Tinggal tempel di WhatsApp tamu.');
        }
    </script>

</body>
</html>