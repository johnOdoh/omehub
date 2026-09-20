
@if ($paginator->hasPages())
    <div id="paginationContainer" class="mt-12 pt-8 border-t border-sand-border flex flex-col sm:flex-row items-center justify-between gap-4">

      <!-- Range Info -->
      <div class="text-xs text-gray-500 font-medium order-2 sm:order-1">
        Showing <span class="font-bold text-brand-dark">{{ $paginator->firstItem() }}</span> to <span class="font-bold text-brand-dark">{{ $paginator->lastItem() }}</span> of <span class="font-bold text-brand-blue">{{ $paginator->total() }}</span> entries
      </div>

      <!-- Page Buttons -->
      <div class="flex items-center gap-1.5 order-1 sm:order-2">
        <!-- Previous Page Button -->
        @if ($paginator->onFirstPage())
          <span class="flex items-center gap-1 px-3.5 py-2 rounded-xl text-xs font-bold border border-gray-200 bg-white text-gray-400 opacity-40 cursor-not-allowed transition-all shadow-sm">
            <i data-lucide="chevron-left" class="w-4 h-4"></i>
            <span class="hidden sm:inline">Previous</span>
          </span>
        @else
          <a href="{{ $paginator->previousPageUrl() }}"
            class="flex items-center gap-1 px-3.5 py-2 rounded-xl text-xs font-bold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 hover:border-brand-blue/30 transition-all shadow-sm">
            <i data-lucide="chevron-left" class="w-4 h-4"></i>
            <span class="hidden sm:inline">Previous</span>
          </a>
        @endif

        <!-- Dynamic Page Number Pills Container -->
        <div class="flex items-center gap-1">
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <span class="px-2 py-1 text-xs font-bold text-gray-400">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span class="w-9 h-9 rounded-xl text-xs font-extrabold bg-brand-blue text-white shadow-sm flex items-center justify-center">{{ $page }}</span>
                @else
                  <a href="{{ $url }}" class="w-9 h-9 rounded-xl text-xs font-bold text-gray-700 hover:bg-gray-100 flex items-center justify-center transition-all">{{ $page }}</a>
                @endif
              @endforeach
            @endif
          @endforeach
        </div>

        <!-- Next Page Button -->
        @if ($paginator->hasMorePages())
          <a href="{{ $paginator->nextPageUrl() }}"
            class="flex items-center gap-1 px-3.5 py-2 rounded-xl text-xs font-bold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 hover:border-brand-blue/30 transition-all shadow-sm">
            <span class="hidden sm:inline">Next</span>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
          </a>
        @else
          <span class="flex items-center gap-1 px-3.5 py-2 rounded-xl text-xs font-bold border border-gray-200 bg-white text-gray-400 opacity-40 cursor-not-allowed transition-all shadow-sm">
            <span class="hidden sm:inline">Next</span>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
          </span>
        @endif
      </div>

    </div>
@endif
