<x-app-layout>
    <x-slot name="header">Website Configuration</x-slot>
    @include('admin.partials.summernote')

    <div class="space-y-6 max-w-4xl mx-auto">
        @if (session('success'))
            <div
                class="p-4 rounded-2xl bg-green-500/10 border border-green-500/50 text-green-400 flex items-center gap-3 animate-fade-in">
                <i class="fas fa-check-circle"></i>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Section: Branding Assets -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-orange-500/10 text-orange-400 flex items-center justify-center border border-orange-500/20">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Branding Assets</h4>
                        <p class="text-xs text-gray-500">Manage your logo and tab icons.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <!-- Logo -->
                    <div class="space-y-4">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest pl-1">Primary
                            Agency Logo</label>
                        <div class="relative group">
                            <div
                                class="aspect-video rounded-2xl bg-white/[0.02] border border-white/5 flex items-center justify-center overflow-hidden mb-4">
                                @if (isset($settings['company_logo']))
                                    <img src="{{ asset('storage/' . $settings['company_logo']) }}"
                                        class="max-h-20 object-contain" id="logo_preview">
                                @else
                                    <div class="text-gray-700 font-black italic text-2xl" id="logo_placeholder">PROUD
                                        TECH</div>
                                @endif
                            </div>
                            <input type="file" name="company_logo" class="hidden" id="logo_input" accept="image/*"
                                onchange="previewImage(this, 'logo_preview', 'logo_placeholder')">
                            <button type="button" onclick="document.getElementById('logo_input').click()"
                                class="w-full py-4 glass border border-white/10 rounded-xl text-[10px] font-black uppercase tracking-widest text-white hover:bg-white/5 transition-all">
                                Update Logo Artifact
                            </button>
                        </div>
                        <p class="text-[9px] text-gray-600 uppercase font-bold tracking-tight px-1">Recommended:
                            Transparent PNG, 512x512px</p>
                    </div>

                    <!-- Favicon -->
                    <div class="space-y-4">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest pl-1">Site
                            Favicon</label>
                        <div class="relative group">
                            <div
                                class="aspect-video rounded-2xl bg-white/[0.02] border border-white/5 flex items-center justify-center overflow-hidden mb-4">
                                @if (isset($settings['company_favicon']))
                                    <img src="{{ asset('storage/' . $settings['company_favicon']) }}"
                                        class="w-12 h-12 object-contain" id="favicon_preview">
                                @else
                                    <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-black text-xl"
                                        id="favicon_placeholder">P</div>
                                @endif
                            </div>
                            <input type="file" name="company_favicon" class="hidden" id="favicon_input"
                                accept="image/x-icon,image/png"
                                onchange="previewImage(this, 'favicon_preview', 'favicon_placeholder')">
                            <button type="button" onclick="document.getElementById('favicon_input').click()"
                                class="w-full py-4 glass border border-white/10 rounded-xl text-[10px] font-black uppercase tracking-widest text-white hover:bg-white/5 transition-all">
                                Update Tab Icon
                            </button>
                        </div>
                        <p class="text-[9px] text-gray-600 uppercase font-bold tracking-tight px-1">Recommended: ICO or
                            PNG, 32x32px</p>
                    </div>
                </div>
            </div>

            <script>
                function previewImage(input, previewId, placeholderId) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            let preview = document.getElementById(previewId);
                            let placeholder = document.getElementById(placeholderId);

                            if (preview) {
                                preview.src = e.target.result;
                            } else {
                                // Create img if placeholder exists
                                let img = document.createElement('img');
                                img.id = previewId;
                                img.src = e.target.result;
                                img.className = previewId === 'logo_preview' ? 'max-h-20 object-contain' :
                                    'w-12 h-12 object-contain';
                                placeholder.parentNode.replaceChild(img, placeholder);
                            }
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>

            <!-- Section: Identity -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Brand Identity</h4>
                        <p class="text-xs text-gray-500">Core information about your agency.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Company
                            Name</label>
                        <input type="text" name="company_name" value="{{ $settings['company_name'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Company
                            Tagline</label>
                        <input type="text" name="company_tagline" value="{{ $settings['company_tagline'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Primary
                            Email</label>
                        <input type="email" name="company_email" value="{{ $settings['company_email'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Headquarters
                            (Address)</label>
                        <input type="text" name="company_address" value="{{ $settings['company_address'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="md:col-span-2 space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Meta
                            Description (SEO)</label>
                        <textarea name="meta_description" rows="3"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['meta_description'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section: WhatsApp -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-green-500/10 text-green-400 flex items-center justify-center border border-green-500/20">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">WhatsApp Integration</h4>
                        <p class="text-xs text-gray-500">Configure your direct line to customers.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">WhatsApp
                            Number</label>
                        <input type="text" name="whatsapp_number" placeholder="e.g. 62812345678"
                            value="{{ $settings['whatsapp_number'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-green-500 focus:border-green-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="md:col-span-2 space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Default
                            Pre-filled Message</label>
                        <textarea name="whatsapp_message" rows="2"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-green-500 focus:border-green-500 placeholder-gray-600 transition-all resize-none">{{ $settings['whatsapp_message'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section: Homepage Content -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center border border-indigo-500/20">
                        <i class="fas fa-home"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Homepage Content</h4>
                        <p class="text-xs text-gray-500">Master copy for your landing page.</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Hero Title
                            (Allows HTML)</label>
                        <textarea name="home_hero_title" rows="2"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['home_hero_title'] ?? '' }}</textarea>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Hero
                            Subtitle</label>
                        <textarea name="home_hero_subtitle" rows="3"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['home_hero_subtitle'] ?? '' }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Hero
                                Audit CTA Label</label>
                            <input type="text" name="home_hero_cta_audit"
                                value="{{ $settings['home_hero_cta_audit'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Hero
                                Discussion CTA Label</label>
                            <input type="text" name="home_hero_cta_discuss"
                                value="{{ $settings['home_hero_cta_discuss'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Bottom CTA
                            Title (Allows HTML)</label>
                        <textarea name="home_cta_title" rows="2"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['home_cta_title'] ?? '' }}</textarea>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Bottom CTA
                            Subtitle</label>
                        <textarea name="home_cta_subtitle" rows="2"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['home_cta_subtitle'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section: About Page Content -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">About Page Content</h4>
                        <p class="text-xs text-gray-500">Narrative and brand story management.</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">About Hero
                            Title (Allows HTML)</label>
                        <textarea name="about_hero_title" rows="2"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['about_hero_title'] ?? '' }}</textarea>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">About Hero
                            Subtitle</label>
                        <textarea name="about_hero_subtitle" rows="2"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['about_hero_subtitle'] ?? '' }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Narrative
                                Title</label>
                            <input type="text" name="about_narrative_title"
                                value="{{ $settings['about_narrative_title'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Narrative
                                Subtitle (Allows HTML)</label>
                            <input type="text" name="about_narrative_subtitle"
                                value="{{ $settings['about_narrative_subtitle'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Narrative
                            Content</label>
                        <textarea name="about_narrative_content" rows="4"
                            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['about_narrative_content'] ?? '' }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 rounded-2xl space-y-4">
                            <h5 class="text-white font-bold text-sm">Goal / Purpose</h5>
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Title</label>
                                <input type="text" name="about_narrative_goal_title"
                                    value="{{ $settings['about_narrative_goal_title'] ?? '' }}"
                                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Description</label>
                                <textarea name="about_narrative_goal_desc" rows="2"
                                    class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['about_narrative_goal_desc'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="p-6 bg-white/5 rounded-2xl space-y-4">
                            <h5 class="text-white font-bold text-sm">Target / ROI</h5>
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Title</label>
                                <input type="text" name="about_narrative_target_title"
                                    value="{{ $settings['about_narrative_target_title'] ?? '' }}"
                                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Description</label>
                                <textarea name="about_narrative_target_desc" rows="2"
                                    class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['about_narrative_target_desc'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Standards
                                Section Title</label>
                            <input type="text" name="about_standards_title"
                                value="{{ $settings['about_standards_title'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Standards
                                Section Subtitle (Allows HTML)</label>
                            <input type="text" name="about_standards_subtitle"
                                value="{{ $settings['about_standards_subtitle'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section: Contact Page Content -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Contact Page Content</h4>
                        <p class="text-xs text-gray-500">CTA and contact narrative management.</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Contact
                                Hero Title (Allows HTML)</label>
                            <input type="text" name="contact_hero_title"
                                value="{{ $settings['contact_hero_title'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Contact
                                Hero Subtitle</label>
                            <input type="text" name="contact_hero_subtitle"
                                value="{{ $settings['contact_hero_subtitle'] ?? '' }}"
                                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                        </div>
                    </div>

                    <div class="p-6 bg-white/5 rounded-2xl space-y-6">
                        <h5 class="text-white font-bold text-sm">Interface Card Content</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Card
                                    Title</label>
                                <input type="text" name="contact_interface_title"
                                    value="{{ $settings['contact_interface_title'] ?? '' }}"
                                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Reply
                                    Latency Text</label>
                                <input type="text" name="contact_reply_latency"
                                    value="{{ $settings['contact_reply_latency'] ?? '' }}"
                                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Card
                                Description</label>
                            <textarea name="contact_interface_subtitle" rows="2"
                                class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ $settings['contact_interface_subtitle'] ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section: Social -->
            <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center border border-purple-500/20">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Social Media</h4>
                        <p class="text-xs text-gray-500">Connect your agency's online presence.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Instagram
                            URL</label>
                        <input type="url" name="instagram" value="{{ $settings['instagram'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-purple-500 focus:border-purple-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">LinkedIn
                            URL</label>
                        <input type="url" name="linkedin" value="{{ $settings['linkedin'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-purple-500 focus:border-purple-500 placeholder-gray-600 transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">GitHub
                            URL</label>
                        <input type="url" name="github" value="{{ $settings['github'] ?? '' }}"
                            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-purple-500 focus:border-purple-500 placeholder-gray-600 transition-all">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end pt-4">
                <button type="submit"
                    class="px-10 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:bg-gray-100 transition-all active:scale-95 shadow-xl shadow-white/5">
                    Synchronize Changes
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
